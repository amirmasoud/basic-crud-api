<template>
    <div>
        <div v-for="sample in samples" :key="sample.id">
            <b-card
                :title="sample.name"
                :footer="sample.status"
                tag="article"
                class="mb-4"
            >
                <b-card-text>
                    {{ sample.description }}
                </b-card-text>

                <b-card-text>
                    <pre>
                        <code>{{ sample.code }}</code>
                    </pre>
                </b-card-text>

                <basic-sample-edit :sample="sample.id" @updated="refetch"></basic-sample-edit>
            </b-card>
        </div>
    </div>
</template>

<script>
import axios from 'axios'

export default {
    name: "BasicSampleIndex",
    data() {
        return {
            samples: []
        }
    },
    mounted: async function () {
        await this.fetch()

        this.$root.$on('stored', () => this.refetch())
    },
    methods: {
        async fetch() {
            const response = await axios.get('/api/sample')
            this.samples = response.data.data
        },
        async refetch() {

            await this.fetch()
        }
    }
}
</script>
