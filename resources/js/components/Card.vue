<template>
    <b-card
        header="title"
        header-tag="header"
        :footer="status"
        footer-tag="footer"
        :title="title"
    >
        <b-card-text>{{ description }}</b-card-text>
        <pre>
            <code>{{ code }}</code>
        </pre>
    </b-card>
</template>

<script>
export default {
    name: "BasicCard",
    props: ['title', 'description', 'code', 'status']
}
</script>
