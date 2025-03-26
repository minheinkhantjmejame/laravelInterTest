@if(Auth::guard('hr')->check())
<script>
    // Make sure this comes BEFORE your profile.js include
    window.hrProfileData = {
        name: '{{ Auth::guard("hr")->user()->first_name }} {{ Auth::guard("hr")->user()->last_name }}',
        email: '{{ Auth::guard("hr")->user()->email }}',
        first_name: '{{ Auth::guard("hr")->user()->first_name }}',
        last_name: '{{ Auth::guard("hr")->user()->last_name }}'
    };
</script>
@endif