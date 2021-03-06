<form  id="search_form" class="form input-group mb-0">
@isset($search[0])
    <input id="search" value="{{ str_replace('+', ' ', $search[0]) }}" class="form-control rounded border-dark border-3 ml-3" type="text"
            placeholder="How do I do my taxes" required>
@else
    <input id="search" value="" class="form-control rounded border-dark border-3 ml-3" type="text"
            placeholder="How do I do my taxes" required>
@endisset
    <div class="input-group-append">
        <button class="btn" type="submit">
            <i class="fa fa-search fa-lg"></i>
        </button>
    </div>
<script>
    
    var obj = document.getElementById("search_form");
    obj.addEventListener("submit", function() {
        let input = document.getElementById("search");
        obj.action = "/search/" + input.value.replace(/ /g, '+').replace(/#/g, "%23").replace(/[\<\>\/\"\'\;\-\{\}\[\]\\\(\)]/g, '');
        obj.submit();
    });
</script>
</form>