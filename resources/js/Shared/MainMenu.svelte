<script>
    import { inertia } from '@inertiajs/inertia-svelte';
</script>
<nav>
    <a href="/">Kak<span class="font-bold border-b-4 text-lg">D3v</span></a>
    <ul>
        <li>
            <button use:inertia={{ method: 'post', href: '/logout' }} type="button">Logout</button>
        </li>
    </ul>
</nav>