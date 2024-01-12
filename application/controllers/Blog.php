<?php

class Blog extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    // library untuk database sudah di load di file autoload.php
    // helper untuk url dan form sudah di load di file autoload.php
    $this->load->model('Blog_model');
  }

  public function index()
  {
    $query = $this->Blog_model->getBlogs();
    $data['blogs'] = $query->result_array();

    $this->load->view('blog', $data);
  }

  public function detail($url)
  {
    $query = $this->Blog_model->getSingleBlog('url', $url);
    $data['blog'] = $query->row_array();

    $this->load->view('detail', $data);
  }


  public function add()
  {
    if ($this->input->post()) {
      $data['title'] = $this->input->post('title');
      $data['content'] = $this->input->post('content');
      $data['url'] = $this->input->post('url');

      $id = $this->Blog_model->insertBlog($data);

      if ($id) {
        echo "Data berhasil disimpan";
        redirect('/');
      } else {
        echo "Data gagal disimpan";
      }
    }

    $this->load->view('form_add');
  }

  public function edit($id)
  {
    $query = $this->Blog_model->getSingleBlog('id', $id);
    $data['blog'] = $query->row_array();

    if ($this->input->post()) {
      $post['title'] = $this->input->post('title');
      $post['content'] = $this->input->post('content');
      $post['url'] = $this->input->post('url');

      $id = $this->Blog_model->updateBlog($id, $post);

      if ($id)
        echo "Data berhasil disimpan";
      else
        echo "Data gagal disimpan";
    }

    $this->load->view('form_edit', $data);
  }

  public function delete($id)
  {
    $this->Blog_model->deleteBlog($id);

    redirect('/');
  }
}
