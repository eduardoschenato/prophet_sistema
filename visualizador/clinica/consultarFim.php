                    <div class="col-md-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-content text-center p-md">
                                <div class="col-md-6 col-lg-3 form-group">
                                    <label class="control-label" for="nomClinica">Nome</label>
                                    <input disabled class="form-control" name="nomClinica" type="text" placeholder="Nome da clínica" value="<?php echo $dtoClinica->getNomClinica(); ?>">
                                </div>
                                <div class="col-md-6 col-lg-3 form-group">
                                    <label class="control-label" for="indFisica">Pessoa física?</label>
                                    <br>
                                    <input <?php echo $dtoClinica->getIndFisica() ? 'checked' : ''; ?> disabled name="indFisica" type="checkbox">
                                </div>
                                <div class="col-md-6 col-lg-3 form-group">
                                    <label class="control-label" for="codCpfCnpj">CPF/CNPJ</label>
                                    <input disabled class="form-control mask-cpfcnpj" name="codCpfCnpj" type="text" placeholder="CPF/CNPJ da clínica" value="<?php echo $dtoClinica->getCodCpfCnpj(); ?>">
                                </div>
                                <div class="col-md-6 col-lg-3 form-group">
                                    <label class="control-label" for="strEndereco">Endereço</label>
                                    <input disabled class="form-control" name="strEndereco" type="text" placeholder="Endereço da clínica" value="<?php echo $dtoClinica->getStrEndereco(); ?>">
                                </div>
                                <div class="col-md-6 col-lg-3 form-group">
                                    <label class="control-label" for="nomCidade">Cidade</label>
                                    <input disabled class="form-control" name="nomCidade" type="text" placeholder="Cidade da clínica" value="<?php echo $dtoClinica->getNomCidade(); ?>">
                                </div>
                                <div class="col-md-6 col-lg-3 form-group">
                                    <label class="control-label" for="codCep">CEP</label>
                                    <input disabled class="form-control mask-cep" name="codCep" type="text" placeholder="CEP da clínica" value="<?php echo $dtoClinica->getCodCep(); ?>">
                                </div>
                                <div class="col-md-6 col-lg-3 form-group">
                                    <label class="control-label" for="codUf">Estado</label>
                                    <select disabled class="form-control" name="codUf">
                                        <option value="">Selecione o Estado</option>
                                        <option <?php echo strtolower($dtoClinica->getCodUf() == 'ac') ? 'selected' : ''; ?> value="ac">Acre</option>
                                        <option <?php echo strtolower($dtoClinica->getCodUf() == 'al') ? 'selected' : ''; ?> value="al">Alagoas</option>
                                        <option <?php echo strtolower($dtoClinica->getCodUf() == 'ap') ? 'selected' : ''; ?> value="ap">Amapá</option>
                                        <option <?php echo strtolower($dtoClinica->getCodUf() == 'am') ? 'selected' : ''; ?> value="am">Amazonas</option>
                                        <option <?php echo strtolower($dtoClinica->getCodUf() == 'ba') ? 'selected' : ''; ?> value="ba">Bahia</option>
                                        <option <?php echo strtolower($dtoClinica->getCodUf() == 'ce') ? 'selected' : ''; ?> value="ce">Ceará</option>
                                        <option <?php echo strtolower($dtoClinica->getCodUf() == 'df') ? 'selected' : ''; ?> value="df">Distrito Federal</option>
                                        <option <?php echo strtolower($dtoClinica->getCodUf() == 'es') ? 'selected' : ''; ?> value="es">Espirito Santo</option>
                                        <option <?php echo strtolower($dtoClinica->getCodUf() == 'go') ? 'selected' : ''; ?> value="go">Goiás</option>
                                        <option <?php echo strtolower($dtoClinica->getCodUf() == 'ma') ? 'selected' : ''; ?> value="ma">Maranhão</option>
                                        <option <?php echo strtolower($dtoClinica->getCodUf() == 'ms') ? 'selected' : ''; ?> value="ms">Mato Grosso do Sul</option>
                                        <option <?php echo strtolower($dtoClinica->getCodUf() == 'mt') ? 'selected' : ''; ?> value="mt">Mato Grosso</option>
                                        <option <?php echo strtolower($dtoClinica->getCodUf() == 'mg') ? 'selected' : ''; ?> value="mg">Minas Gerais</option>
                                        <option <?php echo strtolower($dtoClinica->getCodUf() == 'pa') ? 'selected' : ''; ?> value="pa">Pará</option>
                                        <option <?php echo strtolower($dtoClinica->getCodUf() == 'pb') ? 'selected' : ''; ?> value="pb">Paraíba</option>
                                        <option <?php echo strtolower($dtoClinica->getCodUf() == 'pr') ? 'selected' : ''; ?> value="pr">Paraná</option>
                                        <option <?php echo strtolower($dtoClinica->getCodUf() == 'pe') ? 'selected' : ''; ?> value="pe">Pernambuco</option>
                                        <option <?php echo strtolower($dtoClinica->getCodUf() == 'pi') ? 'selected' : ''; ?> value="pi">Piauí</option>
                                        <option <?php echo strtolower($dtoClinica->getCodUf() == 'rj') ? 'selected' : ''; ?> value="rj">Rio de Janeiro</option>
                                        <option <?php echo strtolower($dtoClinica->getCodUf() == 'rn') ? 'selected' : ''; ?> value="rn">Rio Grande do Norte</option>
                                        <option <?php echo strtolower($dtoClinica->getCodUf() == 'rs') ? 'selected' : ''; ?> value="rs">Rio Grande do Sul</option>
                                        <option <?php echo strtolower($dtoClinica->getCodUf() == 'ro') ? 'selected' : ''; ?> value="ro">Rondônia</option>
                                        <option <?php echo strtolower($dtoClinica->getCodUf() == 'rr') ? 'selected' : ''; ?> value="rr">Roraima</option>
                                        <option <?php echo strtolower($dtoClinica->getCodUf() == 'sc') ? 'selected' : ''; ?> value="sc">Santa Catarina</option>
                                        <option <?php echo strtolower($dtoClinica->getCodUf() == 'sp') ? 'selected' : ''; ?> value="sp">São Paulo</option>
                                        <option <?php echo strtolower($dtoClinica->getCodUf() == 'se') ? 'selected' : ''; ?> value="se">Sergipe</option>
                                        <option <?php echo strtolower($dtoClinica->getCodUf() == 'to') ? 'selected' : ''; ?> value="to">Tocantins</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-lg-3 form-group">
                                    <label class="control-label" for="strEmail">E-mail</label>
                                    <input disabled class="form-control" name="strEmail" type="email" placeholder="E-mail da clínica" value="<?php echo $dtoClinica->getStrEmail(); ?>">
                                </div>
                                <div class="col-md-6 col-lg-3 form-group">
                                    <label class="control-label" for="strSite">Site</label>
                                    <input disabled class="form-control" name="strSite" type="text" placeholder="Site da clínica" value="<?php echo $dtoClinica->getStrSite(); ?>">
                                </div>
                                <div class="col-md-6 col-lg-3 form-group">
                                    <label class="control-label" for="nomFacebook">Facebook</label>
                                    <input disabled class="form-control" name="nomFacebook" type="text" placeholder="Facebook da clínica" value="<?php echo $dtoClinica->getNomFacebook(); ?>">
                                </div>
                                <div class="col-md-6 col-lg-2 form-group">
                                    <label class="control-label" for="numWhatsapp">Número Whatsapp</label>
                                    <input disabled class="form-control" name="numWhatsapp" type="text" placeholder="Whatsapp da clínica" value="<?php echo $dtoClinica->getNumWhatsapp(); ?>">
                                </div>
                                <div class="col-md-6 col-lg-2 form-group">
                                    <label class="control-label" for="numTelefone1">Telefone 1</label>
                                    <input disabled class="form-control" name="numTelefone1" type="text" placeholder="Telefone da clínica" value="<?php echo $dtoClinica->getNumTelefone1(); ?>">
                                </div>
                                <div class="col-md-6 col-lg-2 form-group">
                                    <label class="control-label" for="numTelefone2">Telefone 2</label>
                                    <input disabled class="form-control" name="numTelefone2" type="text" placeholder="Telefone da clínica" value="<?php echo $dtoClinica->getNumTelefone2(); ?>">
                                </div>
                                <?php
                                    if(isset($_SESSION['master'])){
                                ?>
                                <div class="col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                                    <a href="<?php echo BASE_URL; ?>/clinica/atualizar">
                                        <button type="button" class="btn btn-block btn-lg btn-success">
                                            Editar
                                        </button>
                                    </a>
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
