<?php
namespace App\Controller;

class ArtigosController extends AppController
{	
	function index(){
		return $this->redirect(['action' => 'lista']);
	}

	/* LISTA OS ARTIGOS */
	function lista (){		
		$artigos    = $this->Artigos->find('all');
		$categorias = 
		$this->set(compact('artigos'));
	}

	/* EXIBE UM ARTIGO */
	function visualizar($id = null){
		if(is_null($id)){
			$artigo = null;			
		}else{
			$artigo = $this->Artigos->get($id);			
		}
		$this->set(compact('artigo'));
	}

	/* ADICIONAR ARTIGO */
	function adicionar(){
		$artigo = $this->Artigos->newEntity();
		if($this->request->is('post')){
			$artigo = $this->Artigos->patchEntity($artigo,$this->request->getData());			
			if($this->Artigos->save($artigo)){
				$this->Flash->success(__('Artigo cadastrado com sucesso!'));
				return $this->redirect(['action' => 'lista']);
			}else{
				$this->Flash->error('Erro ao cadastrar o artigo!');
			}
		}
		$categorias = $this->Artigos->Categorias->find('list', ['limit' => 5]);
		$this->set(compact('artigo','categorias'));	
	}

	/* EDITAR ARTIGO */
	function editar($id = null){
		
		if(is_null($id)){
			$this->Flash->error(__('Selecionar o artigo antes!'));
			return $this->redirect(['action' => 'lista']);
		}

		$artigo = $this->Artigos->get($id);		
		if($this->request->is(['post','put'])){
			$artigo = $this->Artigos->patchEntity($artigo,$this->request->getData());
			if($this->Artigos->save($artigo)){
				$this->Flash->success(__('Artigo atulizado com sucesso!'));
				return $this->redirect(['action' => 'lista']);
			}else{
				$this->Flash->error(__('Erro ao atulizado artigo!'));
			}
		}
		$this->set('artigo',$artigo);
	}

	/* EXCLUIR ARTIGO */
	function excluir($id = null){
		
		if(is_null($id)){
			$this->Flash->error(__('Selecionar o artigo antes!'));
			return $this->redirect(['action' => 'lista']);
		}

		$this->request->allowMethod(['post','delete']);

		$artigo = $this->Artigos->get($id);
		if($this->Artigos->delete($artigo)){
			$this->Flash->success(__('Artigo excluído com sucesso!'));			
		}else{
			$this->Flash->error(__('Erro ao excluir o artigo!'));
		}
		return $this->redirect(['action' => 'lista']);
	}
}