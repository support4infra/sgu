<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <div class="d-inline">
                    <h4>Usuários</h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="<?php echo BASE_URL;?>usuarios"> <i class="fa fa-street-view"></i> </a>
                    </li>
                    <li class="breadcrumb-item">Administração
                    </li>
                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL;?>perfil">Usuários</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php if (isset($alerta) && !empty($alerta)):?>
    <div class="alert alert-warning background-warning">
        <strong><?php echo $alerta;?></strong>
    </div>
<?php endif;?>
                                                                
<div class="card">
    <div class="card-header">
        <h4 >Criar Novo Usuário</h4>
    </div>
    <div class="card-block">
        <form method="POST">
            <div class="form-group row">
                <label class="col-sm-1 col-form-label">E-mail</label>
                <div class="col-sm-5">
                    <input type="email" name="email" class="form-control" placeholder="usuario.segundo@email.com.br">
                </div>
                <label class="col-sm-1 col-form-label">Nome</label>
                <div class="col-sm-5">
                    <input type="text" name="nome" class="form-control" placeholder="Usuário Segundo">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-1 col-form-label">Senha</label>
                <div class="col-sm-5">
                    <input type="password" name="senha" class="form-control" placeholder="********">
                </div>
                <label class="col-sm-1 col-form-label">Perfil</label>
                <div class="col-sm-5">
                    <select name="grupo" class="form-control">
                        <option disabled selected>Selecione o Perfil</option>
                        <?php foreach($getListPerfil as $perfil):?>
                        <option value="<?php echo $perfil['id'];?>"><?php echo $perfil['nome'];?></option>
                        <?php endforeach;?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <div class="col-sm-4">
                        <a href="<?php echo BASE_URL?>usuarios" class="btn btn-danger mobtn">Cancelar</a>
                        <input type="submit" class="btn btn-primary" value="Salvar">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>