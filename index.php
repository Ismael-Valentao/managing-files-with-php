<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
</head>

<body class="bg-dark text-light text-center position-relative">
    <div class="col-12 text-center" style="width:70%; margin:auto">
        <h3 style="margin-top: 50px;">Selecione a pasta</h3>
        <form id="form" method="post" enctype="multipart/form-data">
            <div class="mb-3 py-5">
                <input class="form-control" type="file" name="file" webkitdirectory id="input_file" multiple>
            </div>
            <button type="button" class="btn btn-light" id="uploadButton">Processar</button>
        </form>
    </div>
    <div class="d-flex py-5" id="div_extensions" style="text-align: left;padding-top:10px; width:70%; justify-content:space-between; margin:auto; flex-wrap:wrap">
        <div class="col-12" style="padding: 20px; padding-left:0; padding-top:0">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="chb_select_all">
                <label class="form-check-label" for="chb_select_all">Selecionar tudo</label>
            </div>
        </div>
        <div class="">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="chb_pdf" checked>
                <label class="form-check-label" for="chb_pdf">PDF</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="chb_excel" checked>
                <label class="form-check-label" for="chb_excel">Excel</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="chbt_word">
                <label class="form-check-label" for="chb_word">Word</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="chb_powerpoint">
                <label class="form-check-label" for="chb_powerpoint">Powerpoint</label>
            </div>
        </div>
        <div class="">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="chb_image" checked>
                <label class="form-check-label" for="chb_image">Imagem</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="chb_audio">
                <label class="form-check-label" for="chb_audio">Áudio</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="chb_video">
                <label class="form-check-label" for="chb_video">Vídeo</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="chb_gif">
                <label class="form-check-label" for="chb_gif">Gif</label>
            </div>
        </div>
        <div class="">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="chb_zip">
                <label class="form-check-label" for="chb_zip">Zip</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="chb_rar">
                <label class="form-check-label" for="chb_rar">Rar</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="chb_htaccess">
                <label class="form-check-label" for="chb_htaccess">htaccess</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="chb_git">
                <label class="form-check-label" for="chb_git">Git</label>
            </div>
        </div>
        <div class="">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="chb_html">
                <label class="form-check-label" for="chb_html">Html</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="chb_css" checked>
                <label class="form-check-label" for="chb_css">Css</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="chb_javascript">
                <label class="form-check-label" for="chb_javascript">Javascript</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="chb_php">
                <label class="form-check-label" for="chb_php">PHP</label>
            </div>
        </div>
        <div class="">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="chb_python">
                <label class="form-check-label" for="chb_python">Python</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="chb_java">
                <label class="form-check-label" for="chb_java">Java</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="chb_exe">
                <label class="form-check-label" for="chb_exe">Exe</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="chb_bat">
                <label class="form-check-label" for="chb_bat">Bat</label>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const input_file = document.querySelector('#input_file');
        input_file.addEventListener("change", () => {
            console.log(input_file.files)
        });

        function convert_Array(array){
            let myArray = [];
            myArray = array.map((item)=>{
                return item.split("_")[1];
            })
            return myArray;
        }

        var array_selected = [];

        function update_Checkboxes_List() {
            var chechboxes = $("#div_extensions").find("input[type='checkbox']").not(":first");
            $.each(chechboxes, (index, item) => {
                if (item.checked) {
                    array_selected.push(item.id);
                }
            })
            
        }

        function select_All(checked) {
            var chechboxes = $("#div_extensions").find("input[type='checkbox']").not(":first");
            $(".form-check-input").attr("checked", checked);
            $.each(chechboxes, (index, item) => {
                var indexOf = array_selected.indexOf(item.id);
                if (checked) {
                    if (indexOf != -1) {
                        return true;
                    }
                    array_selected.push(item.id);
                    return true;
                }
                if (indexOf == -1) {
                    return true;
                }
                array_selected.splice(indexOf, 1);
            })
        }

        update_Checkboxes_List();

        $(document).ready(function() {
            $("input[type='checkbox']").change(function(e) {
                let id = $(this).attr('id');
                if (id === 'chb_select_all') {
                    select_All(this.checked);
                    return;
                }
                if (this.checked) {
                    if (array_selected.indexOf(id) === -1) {
                        array_selected.push(id);
                        return;
                    }
                }
                if (array_selected.indexOf(id) != -1) {
                    array_selected.splice(array_selected.indexOf(id), 1);
                    return;
                }
            })
        })
        $(document).ready(function() {
            $('#uploadButton').on('click', function() {
                if (!array_selected.length) {
                    Swal.fire({
                        title: 'Alerta!',
                        text: 'Selecione as Extensões Que Deseja Filtrar',
                        icon: 'warning'
                    });
                    return;
                }
                var extensions_array = convert_Array(array_selected);

                var files = $('#input_file')[0].files;

                if (files.length > 0) {
                    var formData = new FormData();

                    for (var i = 0; i < files.length; i++) {
                        formData.append('files[]', files[i]);
                    }
                    formData.append('extensions', extensions_array);

                    $.ajax({
                        url: './Controllers/Copy.php',
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            response = JSON.parse(response);
                            if (response['status'] == 500) {
                                Swal.fire({
                                    title: 'Erro!',
                                    text: 'Erro ao enviar os documentos',
                                    icon: 'error'
                                });
                            } else {
                                Swal.fire({
                                    title: 'Sucesso!',
                                    text: response['message'],
                                    icon: 'success'
                                });
                            }
                            console.log(response)
                        },
                        error: function(error) {
                            Swal.fire({
                                title: 'Erro!',
                                text: 'Erro ao enviar os documentos. Veja os detalhes no console.',
                                icon: 'error'
                            });
                            console.error('Erro durante o upload:', error);
                        }
                    });
                } else {
                    Swal.fire({
                        title: 'Erro!',
                        text: 'Nenhuma Pasta Selecionada...',
                        icon: 'error'
                    });
                }
            });
        });
    </script>

</body>

</html>