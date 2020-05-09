<form action="" id="search_form" class="form input-group mb-0">
@isset($search[0])
    <input id="search" value="{{ $search[0] }}" class="form-control rounded border-dark border-3 ml-3" type="text"
            placeholder="How do I do my taxes">
@else
    <input id="search" value="" class="form-control rounded border-dark border-3 ml-3" type="text"
            placeholder="How do I do my taxes" required>
@endisset
    <div class="input-group-append">
        <button class="btn" type="submit">
            <i class="fa fa-search fa-lg"></i>
        </button>
    </div>
<script type="text/javascript">
    
    var obj = document.getElementById("search_form");
    obj.addEventListener("submit", function() {
        let input = document.getElementById("search");
        obj.action = "/search/" + input.value.replace(' ', '+');
        obj.submit();
    });
</script>
</form>