<?php
/*include('./classes/System.php');
$dir = 'D:/Books/Psicologia';
$new_dir = 'D:/Books/Psicologia2';

$system = new System();

$system->copy_files_pdf($dir, $new_dir);
*/
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
</head>

<body class="bg-dark text-light text-center">
    <div class="col-12 text-center" style="width:70%; margin:auto">
        <h3 style="margin-top: 50px;">Selecione a pasta</h3>
        <form id="form" method="post" enctype="multipart/form-data">
            <div class="mb-3 py-5">
                <input class="form-control" type="file" name="file" webkitdirectory id="input_file" multiple>
            </div>
            <button type="button" class="btn btn-light" id="uploadButton">Processar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const input_file = document.querySelector('#input_file');
        input_file.addEventListener("change", () => {
            console.log(input_file.files)
        });
        $(document).ready(function() {
            $('#uploadButton').on('click', function() {
                var files = $('#input_file')[0].files;

                if (files.length > 0) {
                    var formData = new FormData();

                    for (var i = 0; i < files.length; i++) {
                        formData.append('files[]', files[i]);
                    }

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
                                    text: 'Pasta Organizada Com Sucesso',
                                    icon: 'success'
                                });
                            }
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