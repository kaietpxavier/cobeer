<style>
  <?php include __DIR__ . '/template.css'; ?>
</style>
<label>
  <input type="checkbox">
  <span class="menu"> <span class="hamburger"></span> </span>
  <ul>
    <li>
      <a href="/cobeer/view/pages/home" class="btn">
        <svg width="277" height="62">
          <defs>
            <linearGradient id="grad1">
              <stop offset="0%" stop-color="#FF8282" />
              <stop offset="100%" stop-color="#E178ED" />
            </linearGradient>
          </defs>
          <rect x="5" y="5" rx="25" fill="none" stroke="url(#grad1)" width="266" height="50"></rect>
        </svg>
        <!--<span>Voir mes réalisations</span>-->
        <span>Inicio</span>
      </a>
    </li>
    <li>
      <a href="/cobeer/view/pages/login" class="btn">
        <svg width="277" height="62">
          <defs>
            <linearGradient id="grad1">
              <stop offset="0%" stop-color="#FF8282" />
              <stop offset="100%" stop-color="#E178ED" />
            </linearGradient>
          </defs>
          <rect x="5" y="5" rx="25" fill="none" stroke="url(#grad1)" width="266" height="50"></rect>
        </svg>
        <!--<span>Voir mes réalisations</span>-->
        <span>Login</span>
      </a>
    </li>
    <li>
      <a href="/cobeer/view/pages/departamentos" class="btn" id="depts">
        <svg width="277" height="62">
          <defs>
            <linearGradient id="grad1">
              <stop offset="0%" stop-color="#FF8282" />
              <stop offset="100%" stop-color="#E178ED" />
            </linearGradient>
          </defs>
          <rect x="5" y="5" rx="25" fill="none" stroke="url(#grad1)" width="266" height="50"></rect>
        </svg>
        <!--<span>Voir mes réalisations</span>-->
        <span>Departamentos</span>
      </a>
    </li>
    <div class="subMenu">
      <li><a href="/cobeer/view/pages/articulo_departamento">Dietetica</a></li>
      <li><a href="/cobeer/view/pages/articulo_departamento">DAW</a></li>
      <li><a href="/cobeer/view/pages/articulo_departamento">CAI</a></li>
    </div>
  </ul>

</label>