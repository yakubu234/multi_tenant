<!-- resources/views/create_tenant_user_form.blade.php -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<form id="createTenantUserForm">
    <!-- Tenant ID -->
    <div>
        <label for="tenant_id">Tenant ID:</label>
        <input type="text" name="tenant_id" id="tenant_id">
    </div>

    <!-- Domain -->
    <div>
        <label for="domain">Domain:</label>
        <input type="text" name="domain" id="domain">
    </div>

    <!-- User Name -->
    <div>
        <label for="user_name">User Name:</label>
        <input type="text" name="user_name" id="user_name">
    </div>

    <!-- User Email -->
    <div>
        <label for="user_email">User Email:</label>
        <input type="email" name="user_email" id="user_email">
    </div>

    <button type="submit">Create Tenant & User</button>
</form>

<script>
    document.getElementById('createTenantUserForm').addEventListener('submit', function(event) {
        event.preventDefault();
        
        var formData = new FormData(this);
        var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        
        fetch("{{ route('add-tenant') }}", {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        })
        .then(response => response.json())
        .then(data => {
            alert(data.message);
        })
        .catch(error => console.error('Error:', error));
    });
</script>
