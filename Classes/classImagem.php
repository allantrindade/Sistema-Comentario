<?php
    class classImagem
    {
        //METODO GERAR NOME DA FOTO + EXTENSÃO
        public function gerarNome($foto)
        {
            $tipo = substr($foto['name'], -4);
            $foto = md5($foto['name']);
            $nomeCompleto = "{$foto}{$tipo}";
            return $nomeCompleto;
            var_dump($nomeCompleto);
            exit;
        }

        //METODO PARA GRAVAR O ARQUIVO NA PASTA IMAGES
        public function gravarFoto($foto){
            $imagem = ($foto['tmp_name']);
            move_uploaded_file($imagem, "../Images/Usuarios/{$this->gerarNome($foto)}");
        }
    }