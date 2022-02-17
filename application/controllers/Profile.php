<?php
class profile extends ci_controller
{
  function index()
  {
    $this->load->view('v_profile');
  }
  function biodata($data1, $data2, $data3, $data4, $data5, $data6, $data7)
  {
    $data = [
      'Nama_depan'   => $data1,
      'Namabelakang'   => $data2,
      'Tempat_lahir' => $data3,
      'Tanggal_lahir'  => $data4,
      'Jenis_kelamin'    => $data5,
      'Alamat'   => $data6,
      'Jenjang_pendidikan'   => $data7,
    ];
    $this->load->view('v_data_profile', $data);
  }
  public function tambah_data()
  {
    $this->load->view('v_tambah_dataprofile');
  }
  public function action_tambah_data()
  {
    $add = [
      'Nama_dean' => $this->input->post('nama_depan'),
      'Namabelakang' => $this->input->post('nama_belakang'),
      'Tempat_lahir' => $this->input->post('tempat_lahir'),
      'Tanggal_lahir' => $this->input->post('tangga_lahir'),
      'Jenis_kelamin' => $this->input->post('jenis_kelamin'),
      'Alamat' => $this->input->post('alamat'),
      'jenjang_pendidikan' => $this->input->post('jenjang_pendidikan'),
    ];
    $this->load->view('V_biodata', $add);
  }
  public function tampil_data()
  {
    $this->load->model('M_profile');
    $data['profile'] = $this->M_profile->tampil_data()->result();
    $this->load->view('v_tampil_data_profile', $data);
  }
}
