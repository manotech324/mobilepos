<form action="{{ $url }}" method="POST" class="d-inline">
    @csrf
    <button type="submit" class="dropdown-item">
        <i class="ti ti-logout me-2"></i>
        Logout
    </button>
</form>
