<select class="changeLang">
    <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
    <option value="mm" {{ session()->get('locale') == 'mm' ? 'selected' : '' }}>Myanmar</option>
</select>
<script>
    var url = "{{ route('changeLang') }}";
    $(".changeLang").change(function() {
        window.location.href = url + "?lang=" + $(this).val();
    });
</script>
