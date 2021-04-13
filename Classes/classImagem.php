<?php
    class classImagem
    {
        //METODO GERAR NOME DA FOTO + EXTENSÃO
        public function gerarNome($foto)
        {
            $ext = $this->getExtension($foto['name']);
            $foto = md5($foto['name']);
            $nomeCompleto = "{$foto}.{$ext}";
            return $nomeCompleto;
            var_dump($nomeCompleto);
            exit;
        }

        //METODO PARA GRAVAR O ARQUIVO NA PASTA IMAGES
        public function gravarFoto($foto){
            $imagem = ($foto['tmp_name']);
            move_uploaded_file($imagem, "../Images/Usuarios/{$this->gerarNome($foto)}");
        }

        //METODO PARA RETORNAR A EXTENSÃO DO ARQUIVO
        public function getExtension($str) {
            $i = strrpos($str,".");
            if (!$i) {return "";}
            $l = strlen($str) - $i;
            $ext = substr($str,$i+1,$l);
            return strtolower($ext);
        }
    }