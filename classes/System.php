<?php
class System
{

    function __construct()
    {
    }
    /**
     * Verifica se um directório existe. Caso não exista, cria o tal directório e retorna ture. Se o directório não existir e não puder ser criado, retorna false.
     * @param [$dir] Directório que deseja verificar
     * @return $condition true/false
     */
    public function check_destiny_dir(string $dir)
    {
        if (!file_exists($dir)) {
            $mkd = mkdir($dir);
            if (!$mkd) {
                return false;
            }
            return true;
        }
        return true;
    }

    public function verify_extension(string $name)
    {
        $extension = explode(".", $name);
        $extension = strtolower($extension[sizeof($extension) - 1]);
        return $extension;
    }

    public function check_from_dir(string $dir)
    {
        $files = scandir($dir);
        if (!sizeof($files)) {
            echo "Directório $dir não existe...";
            return;
        } elseif (sizeof($files) <= 2) {
            echo "Directório Vazio";
            return;
        }
        return $files;
    }

    public function treatName(string $file_name)
    {
        $tmp_name = substr($file_name, strlen($file_name) - 15, 11);
        $new_name = $tmp_name . ' - ' . $file_name;
        return $new_name;
    }

    public function copy_files_rename($from, $to)
    {
        $files = $this->check_from_dir($from);
        $verification = $this->check_destiny_dir($to);
        if ($verification && sizeof($files) > 2) {
            $i = 0;
            foreach ($files as $key => $item) {
                if ($item == '.' || $item == '..' || $item == 'How to') {
                    continue;
                }
                $new_Name = $this->treatName($item);
                $a = copy($from . '/' . $item, $to . '/' . $new_Name);
                if (!$a) {
                    echo "Último Ficheiro Copiado: " . $files[$i - 1];
                    break;
                }
                $i++;
            }
            echo $i . " ficheiros copiados";
            return;
        }
        echo "Erro ao criar o directório destino...";
    }


    /**
     * Copia todos os ficheiros pdf de uma pasta para a outra.
     * @param $from - a pasta com os ficheiros
     * @param $from - a pasta destino
     */
    public function copy_files_pdf($from, $to)
    {
        $files = $this->check_from_dir($from);
        $verification = $this->check_destiny_dir($to);
        if ($verification && sizeof($files) > 2) {
            $i = 0;
            foreach ($files as $key => $item) {
                $extension = $this->verify_extension($item);
                if ($item == '.' || $item == '..' || $extension != 'pdf') {
                    continue;
                }

                $a = copy($from . '/' . $item, $to . '/' . $item);
                if (!$a) {
                    echo "Último Ficheiro Copiado: " . $files[$i - 1];
                    break;
                }
                $i++;
            }
            echo $i . " ficheiros copiados";
            return;
        }
    }


    /**
     * Copia todos os ficheiros word de uma pasta para a outra.
     * @param $from - a pasta com os ficheiros
     * @param $from - a pasta destino
     */
    public function copy_files_word($from, $to)
    {
        $files = $this->check_from_dir($from);
        $verification = $this->check_destiny_dir($to);
        if ($verification && sizeof($files) > 2) {
            $i = 0;
            foreach ($files as $key => $item) {
                $extension = $this->verify_extension($item);
                if ($item == '.' || $item == '..' || $extension != 'doc' || $extension != 'docx') {
                    continue;
                }

                $a = copy($from . '/' . $item, $to . '/' . $item);
                if (!$a) {
                    echo "Último Ficheiro Copiado: " . $files[$i - 1];
                    break;
                }
                $i++;
            }
            echo $i . " ficheiros copiados";
            return;
        }
    }


    /**
     * Copia todos os ficheiros excel de uma pasta para a outra.
     * @param $from - a pasta com os ficheiros
     * @param $from - a pasta destino
     */
    public function copy_files_excel($from, $to)
    {
        $files = $this->check_from_dir($from);
        $verification = $this->check_destiny_dir($to);
        if ($verification && sizeof($files) > 2) {
            $i = 0;
            foreach ($files as $key => $item) {
                $extension = $this->verify_extension($item);
                if ($item == '.' || $item == '..' || $extension != 'xls' || $extension != 'xlsx') {
                    continue;
                }

                $a = copy($from . '/' . $item, $to . '/' . $item);
                if (!$a) {
                    echo "Último Ficheiro Copiado: " . $files[$i - 1];
                    break;
                }
                $i++;
            }
            echo $i . " ficheiros copiados";
            return;
        }
    }


    /**
     * Copia todos os ficheiros powerpoint de uma pasta para a outra.
     * @param $from - a pasta com os ficheiros
     * @param $from - a pasta destino
     */
    public function copy_files_powerpoint(string $from, string $to)
    {
        $files = $this->check_from_dir($from);
        $verification = $this->check_destiny_dir($to);
        if ($verification && sizeof($files) > 2) {
            $i = 0;
            foreach ($files as $key => $item) {
                $extension = $this->verify_extension($item);
                if ($item == '.' || $item == '..' || $extension != 'ppt' || $extension != 'pptx') {
                    continue;
                }

                $a = copy($from . '/' . $item, $to . '/' . $item);
                if (!$a) {
                    echo "Último Ficheiro Copiado: " . $files[$i - 1];
                    break;
                }
                $i++;
            }
            echo $i . " ficheiros copiados";
            return true;
        }
    }
}
