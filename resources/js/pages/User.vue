<template>
    <div>
        <section v-if="name">
            <h1>Hello {{ name }}.</h1>
            <router-link :to="{name: 'User'}">back</router-link>
        </section>
        <section v-else>
            <h1>Daftar User</h1>
            <ul>
                <li v-for="user in users">
                    <router-link :to="profile_uri(user.name)">{{ user.name }}</router-link>
                </li>
            </ul>
        </section>
    </div>
</template>
<script>
export default {
    props: ["name"],
    data() {
        return {
            users: [
                { id: 1, name: "Rizki" },
                { id: 2, name: "Alfatan" },
                { id: 3, name: "Reza" }
            ]
        };
    },
    methods: {
        profile_uri(name){
           return '/user/' + name.toLowerCase()
        }
    }
};
</script>
