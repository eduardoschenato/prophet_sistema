                    <div class="col-md-12">
                        <div class="row">
                            <form action="<?php echo BASE_URL; ?>/questionario/cadastrarOpcaoFim/<?php echo $cdnPergunta; ?>" method="post">
                                <div class="col-md-12 col-lg-12 form-group">
                                    <label class="control-label">Pergunta:</label>
                                    <?php echo $strPergunta; ?>
                                </div>
                                <div class="col-md-12 col-lg-12 form-group">
                                    <label class="control-label" for="strOpcao">Opção</label>
                                    <input required class="form-control" name="strOpcao" type="text">
                                </div>
                                <div class="col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                                    <button type="submit" class="btn btn-block btn-lg btn-primary">
                                        Cadastrar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
