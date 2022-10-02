<main class="main">
  <div class="row d-flex justify-content-evenly">
    <div class="col d-flex justify-content-end logo_div">
        <div class="logo rounded-3">
          <img class="mb-4" src="assets/img/spcc_logo.png" alt="" width="150" height="150">
        
            <h2> Commitment To Excellence</h2>
        </div>
    </div>
    <div class="col d-flex justify-content-start form_div">
      <form class ="form-signin rounded-3" method="POST" action="validateUser" id="form_signin">
      
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="input-group mb-4">
            <div class="input-group-text">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
              </svg>
            </div>
            <input type="text" class="form-control" id="username" placeholder="Username" required>
        </div>

        <div class="input-group mb-4">
              <div class="input-group-text">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                  <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
                </svg>
              </div>
              <input type="password" class="form-control" id="password" placeholder="Password" required>
        </div>

          <button class="w-100 btn btn-lg btn-primary" type="submit" id="btn">Sign in</button>
      </form>
    </div>
  </div>
</main>