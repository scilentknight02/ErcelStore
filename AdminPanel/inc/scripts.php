<!-- bootstrap script cdn start -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
<!-- bootstrap script cdn end -->
<script>
  function alert(type, msg) {
    let bs_class = (type == 'success') ? 'alert-success' : 'alert-danger';
    let element = document.createElement('div');

    element.innerHTML = `
      <div class="alert ${bs_class} alert-dismissible fade show custom-alert" role="alert">
        <strong class="me-2">${msg}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    `;

    document.body.append(element);

    setTimeout(() => {
      element.remove();
    }, 3000);
  }
</script>
<script>
  function setActive() {
    let navbar = document.getElementById('dashboard-menu');
    let a_tags = navbar.getElementsByTagName('a');

    for (i = 0; i < a_tags.length; i++) {
      let file = a_tags[i].href.split('/').pop();
      let file_name = file.split('.')[0];

      if (document.location.href.indexOf(file_name) >= 0) {
        a_tags[i].classList.add('active');
      }
    }
  }
  setActive();
</script>