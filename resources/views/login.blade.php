<!DOCTYPE html> <html lang="pt-BR"> <head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<title>Natural Gynecology</title>
</head>

<body style="background-color: #f8eed1">
    <section class="">
        <div class="px-4 py-5 px-md-5 text-center text-lg-start mt-5"
            style="background-color: #f8eed1; margin-top: 15px;">
            <div class="container">
                <div class="row gx-lg-5 align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h1 class="my-5 display-3 fw-bold ls-tight text-success">
                            Natural <br/>
                            <span class="text-success">Gynecology</span>
                        </h1>
                        <p style="text-dark">
                        Explore tratamentos ginecológicos inovadores com plantas medicinais.<br> 
                        Seu guia de saúde íntima.
                        </p>
                    </div>

                    <div class="col-lg-5 mb-5 mb-lg-0">
                        <div class="card">
                            <div class="card-body py-5 px-md-5">
                            @if(session('error'))
                                <div class="alert alert-danger text-center" role="alert">
                                    {{session('error')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                                <form action="{{route('login')}}" method="post">
                                    @csrf
                                    <div class="form-outline mb-4">
                                        <input type="email" id="email" name ="email" class="form-control" />
                                        <label class="form-label" for="">E-mail</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="senha" name ="senha" class="form-control" />
                                        <label class="form-label" for="">Senha</label>
                                    </div>

                                    <div class="form-check d-flex justify-content-center mb-4">
                                        <input class="form-check-input me-2" type="checkbox" value=""
                                            id="form2Example33" checked />
                                        <label class="form-check-label" for="form2Example33">
                                            Lembrar senha
                                        </label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-block mb-4">
                                            Login
                                        </button>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>