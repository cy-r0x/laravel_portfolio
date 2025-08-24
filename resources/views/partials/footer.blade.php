<footer class="mt-5 pt-4 border-top">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-4">
        <h5 class="jura fw-bold">Prantor's Portfolio</h5>
        <p class="text-muted">A showcase of my competitive programming achievements and web development projects.</p>
      </div>
      <div class="col-md-4 mb-4">
        <h5 class="jura fw-bold">Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="{{ route('home') }}" class="text-decoration-none text-muted">Home</a></li>
          <li><a href="{{ route('projects') }}" class="text-decoration-none text-muted">Projects</a></li>
          <li><a href="{{ route('resume') }}" class="text-decoration-none text-muted">Resume</a></li>
        </ul>
      </div>
      <div class="col-md-4 mb-4">
        <h5 class="jura fw-bold">Connect</h5>
        <div class="d-flex gap-3">
          <a href="https://github.com/cy-r0x" target="_blank" class="text-decoration-none text-muted">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-github"
              viewBox="0 0 16 16">
              <path
                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8" />
            </svg>
          </a>
          <a href="https://facebook.com/cyr0xx" target="_blank" class="text-decoration-none text-muted">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook"
              viewBox="0 0 16 16">
              <path
                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
            </svg>
          </a>
          <a href="mailto:contact@example.com" class="text-decoration-none text-muted">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope"
              viewBox="0 0 16 16">
              <path
                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
            </svg>
          </a>
        </div>
      </div>
    </div>
    <div class="text-center py-3 border-top mt-3">
      <p class="small text-muted mb-0">&copy; {{ date('Y') }} Prantor's Portfolio. All rights reserved.</p>
    </div>
  </div>
</footer>