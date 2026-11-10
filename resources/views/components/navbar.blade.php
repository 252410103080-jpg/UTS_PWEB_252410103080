<nav style="background-color: #4b382e; padding: 20px;">
    <div style="width: 90%; max-width: 1100px; margin: auto; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">

        <h2 style="color: white;">SOloved.</h2>

        <div style="display: flex; gap: 20px; flex-wrap: wrap;">
            <a href="{{ route('dashboard', ['username' => request('username')]) }}" style="color: white; text-decoration: none;">Dashboard</a>

            <a href="{{ route('pengelolaan', ['username' => request('username')]) }}" style="color: white; text-decoration: none;">Pengelolaan</a>

            <a href="{{ route('profile', ['username' => request('username')]) }}" style="color: white; text-decoration: none;">Profile</a>
        </div>

    </div>
</nav>
