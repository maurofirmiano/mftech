<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">

                                    <div class="card-body">

                                      <?php if(isset($edit)){ ?>
                                        <form action="<?= base_url()?>index.php/cadastrocontroller/update/<?=$edit['id']?>" method="post">
                                      <?php } else{ ?>
                                        <form action="<?= base_url()?>index.php/cadastrocontroller/insert" method="post">
                                      <?php }?>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" name="name" value="<?= isset($edit) ? $edit['name'] : ""?>" type="text" placeholder="Digite seu nome" />
                                                        <label for="inputFirstName">Nome</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputPhone" name = "phone" value="<?= isset($edit) ? $edit['phone'] : ""?>" type="text" placeholder="Digite seu número de telefone" />
                                                        <label for="inputPhone">Telefone</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" name="email" value="<?= isset($edit) ? $edit['email'] : ""?>" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email</label>
                                            </div>

                                            <div class="mt-4 mb-0">
                                              <?php if(isset($edit)){ ?>

                                                <div class="d-grid"><button class="btn btn-outline-primary " type="submit">Salvar</button></div>
                                              <?php } else{ ?>
                                                <div class="d-grid"><button class="btn btn-outline-primary " type="submit">Criar Conta</button></div>
                                              <?php } ?>

                                            </div>
                                            <!-- <?php
                                              if($status == "success"){
                                            ?>
                                                <div class="alert alert-success" role="alert">
                                                  Cadastro realizado!
                                                  <?php echo $status; ?>
                                                </div>

                                            <?  } ?> -->
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="<?= base_url() ?>index.php/login">Possui uma conta? Ir para login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
