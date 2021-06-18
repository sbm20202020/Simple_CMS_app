<?php

namespace App\Http\Livewire;

use App\Models\Page;
use Livewire\Component;
use Illuminate\Validation\Rule;

class Pages extends Component
{

    public $modalFormVisible = false;
    public $slug;
    public $title;
    public $content;
    
    
    /**
     * Show the form modal
     *of the create function
     * @return void
     */
    public function createShowModal(){
        $this->modalFormVisible = true;
    }
    
    /**
     * The livewire render function
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.pages');
    }
    
    /**
     * Fonction qui permet la creation d'une page
     *
     * @return void
     */
    public function create(){ 
        $this->validate();
        $page=Page::create($this->modelData());
        $this->modalFormVisible=false;
        $this->resetVars();

        // dd($page);
    }


     
    /**
     * modelData fonction qui fait le mappage des donnees du model
     *
     * @return void
     */
    public function modelData(){
        return [
            'title'=>$this->title,
            'slug'=>$this->slug,
            'content'=>$this->content,
        ];
    }
    
    /**
     * Reset all values of variables
     *
     * @return void
     */
    public function resetVars(){
        $this->title = null;
        $this->slug = null;
        $this->content = null;
    }
    
    /**
     * regles de validation
     *
     * @return void
     */
    public function rules(){
        return [
            'title'=>'required',
            'slug'=>['required',Rule::unique('pages','slug')],
            'content'=>'required',
        ];
    }
    
    /**
     * Demarre à chaque fois qu'un titre est mise à jour, c'est à dire pendant la saisie 
     *
     * @param  mixed $values
     * @return void
     */
    public function updatedTitle($values){
        $this->generateSlug($values);
    }
    
    /**
     * Genere le slug en fonction de la valeur saisie sur le titre
     *  avec deux processus , remplacer les espace par le trait et ensuite mettre tout les caracteres en miniscule
     * @param  mixed $values
     * @return void
     */
    private function generateSlug($values){
        $process1 = str_replace(' ','-',$values);
        $process2 = strtolower($process1);

        $this->slug=$process2;


    }
}
