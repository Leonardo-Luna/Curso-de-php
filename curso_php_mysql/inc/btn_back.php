<p class="has-text-right">
    <a href="#" class="button is-info btn-back"><- Regresar atrás</a>
</p>

<script type="text/javascript">
    let btn_back = document.querySelector(".btn-back");

    btn_back.addEventListener('click', function(e){
        e.preventDefault();
        window.history.back();
    });
</script>