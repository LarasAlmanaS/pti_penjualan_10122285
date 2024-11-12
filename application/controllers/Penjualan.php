function penjualan()
{
	$data['dataPenjualan'] = $this->m_penjualan->getPenjualanPetugas()->result();
	$this->load->view('petugas/header');
	$this->load->view('petugas/dataPenjualan',$data);
	$this->load->view('petugas/footer');
}
function dataPenjualan()
{
	if (!$this->session->userdata('level')=='Admin') {
	redirect('login');
}else{
	$data['admin'] = $this->m_user->selectAdmin()->row();
	$data['dataPenjualan'] = $this->m_penjualan->getPenjualan()->result();
	$this->load->view('admin/header',$data);
	$this->load->view('admin/dataPenjualan');
	$this->load->view('admin/footer');
	}
}
function hapus($idPenjualan){
	if (!$this->session->userdata('level')=='Admin') {
	redirect('login');
}else{
	$this->m_penjualan->hapus($idPenjualan);
	$this->session->set_flashdata('info', 'SUKSESS : Berhasil di Hapus');
	redirect('penjualan/dataPenjualan');
	}
}