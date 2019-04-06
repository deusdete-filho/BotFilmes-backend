<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filmes extends CI_Controller {
	public function index()
	{
					$this->db->select('*');
					$this->db->order_by("id", "asc");
					$dados['filmes'] = $this->db->get('filme')->result();

		$this->load->view('filmes',$dados);
	}

		public function cadastro($indice=null)
		{
					if($indice==1){
						$data['msg'] = "Cadastrao do Filme realizado com sucesso!";
						$this->load->view('includes/msg_sucesso',$data);
					}
					else if ($indice==2) {
						$data['msg'] = "Erro! Não foi possível cadastrar.";
						$this->load->view('includes/msg_erro',$data);
					}
					if($indice==3){
						$data['msg'] = "Erro no upload do cartaz";
						$this->load->view('includes/msg_erro',$data);
					}
					$this->load->view('cadastrar_filme');
		}

	public function salvar()
	{

							$folder = random_string('banner');
							$path = "./cartaz/".$folder;
							if ( ! is_dir($path)) {
							mkdir($path, 0777, $recursive = true);
							}
							$configUpload['upload_path']   = $path;
							$configUpload['allowed_types'] = 'jpeg|jpg|png|gif';
							$configUpload['encrypt_name']  = TRUE;
							$this->upload->initialize($configUpload);
							if ( ! $this->upload->do_upload('imagem'))
							{
							redirect('filmes/cadastro/3');
							}
							else
							{
							$data1['dadosArquivo'] = $this->upload->data();
							$arquivoPath = 'cartaz/'.$folder."/".$data1['dadosArquivo']['file_name'];
							// passando para o array '$data'
							$data1['urlArquivo'] = base_url($arquivoPath);
							// definimos a URL para download
							$downloadPath ='cartaz'.$folder."/".$data1['dadosArquivo']['file_name'];
							// passando para o array '$data'
							$data['imagem'] = base_url($downloadPath);
							}

						$data['titulo'] = $this->input->post('titulo');
						$data['ano'] = $this->input->post('ano');
						$data['genero'] = $this->input->post('genero');
						$data['tempo'] = $this->input->post('tempo');
						$data['avaliacao'] = $this->input->post('avaliacao');
						$data['descricao'] = $this->input->post('descricao');
						$data['direcao'] = $this->input->post('direcao');
						$data['elenco'] = $this->input->post('elenco');
						$data['url'] = $this->input->post('url');

						if($this->db->insert('filme',$data)){
							redirect('filmes/cadastro/1');
						}else{
							redirect('filmes/cadastro/2');}


		$this->load->view('cadastrar_filme');
	}
	public function exibir($id=null)
	{
					$this->db->where('id',$id);
					$dados['filme'] = $this->db->get('filme')->result();


		$this->load->view('exibir_filme',$dados);
	}




}
