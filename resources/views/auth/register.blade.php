<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/style.css" />
    <link rel="stylesheet" href="assets/loginSignUpStyle.css" />

    <title>Registro de Atividade - Cadastre-se</title>
  </head>

  <body>
    <a href="{{route('login')}}" class="back-button">← Voltar</a>
    <div class="login-page">
      <div class="login-area">
        <h3 class="login-title">Cadastro do Registro de Atividade</h3>
        <div class="text-login">
          Preencha os campos abaixo e realize seu cadastro.
        </div>
        <form method="POST" action="{{route('register_action')}}">
          @csrf
          <!-- Nome -->
          <div class="name-area">
            <div class="name-label">Nome</div>
            <input type="text" class="@error('nome') is-invalid @enderror" name="nome" placeholder="Digite o seu nome" value="{{@old('name')}}"/>
            @error('nome')
              <div class="error">
                {{ $message }}
              </div>
            @enderror
          </div>
          <!-- E-mail -->
          <div class="email-area">
            <div class="email-label">E-mail</div>
            <input type="email" class="@error('email') is-invalid @enderror" name="email" placeholder="Digite o seu e-mail" value="{{@old('email')}}"/>
            @error('email')
              <div class="error">
                {{ $message }}
              </div>
            @enderror            
          </div>
            <!-- CPF -->
            <div class="cpf-area">
            <div class="cpf-label">CPF</div>
            <input type="text" class="@error('cpf') is-invalid @enderror" name="cpf" placeholder="Digite o seu CPF" value="{{@old('cpf')}}"/>
            @error('cpf')
              <div class="error">
                {{ $message }}
              </div>
            @enderror
          </div>
          <!-- Órgão -->
          <div class="orgao-area">
            <div class="orgao-label">Órgão</div>
            <select name="orgao" >
              @foreach ($orgaos as $orgao)
                <option value="{{$orgao->id}}">{{$orgao->nome}}</option>
              @endforeach
            </select>
          </div>
          <!-- Senha -->
          <div class="password-area">
            <div class="password-label">Senha</div>
            <div class="password-input-area">
              <input type="password" class="@error('password') is-invalid @enderror" name="password" placeholder="Digite a sua senha" />
              <img src="assets/icons/eyeIcon.png" alt="Ícone mostrar senha" />
            </div>
              @error('password')
                <div class="error">
                  {{ $message }}
                </div>
              @enderror
          </div>
          <!-- Confirmar Senha -->
          <div class="password-area">
            <div class="password-label">Confirme sua Senha</div>
            <div class="password-input-area">
              <input type="password" name="password_confirmation" placeholder="Confirme a sua senha" />
              <img src="assets/icons/eyeIcon.png" alt="Ícone mostrar senha" />
          </div>
          </div>
          <button class="login-button">Cadastrar</button>
        </form>
        <div class="register-area">
          Já tem cadastro? <a href="{{route('login')}}">Fazer Login</a>
        </div>
      </div>
      <div class="terms">
        Ao continuar, você concorda com os <a href="">Termos de Uso</a> e a
        <a href="">Política de Privacidade</a>, e também, em receber
        comunicações via e-mail e push de todos os nossos parceiros.
      </div>
    </div>
    <x-base.footer />
  </body>
</html>
