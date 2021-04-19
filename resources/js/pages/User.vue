<template>
    <div>
        <section v-if="name">
            <h1>Hello {{ name }}.</h1>
        </section>
        <section v-else>
            <h1>Daftar User</h1>
            <ul>
                <li v-for="user in users" :key="user">{{ user.name }}</li>
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
    }
};
</script>
