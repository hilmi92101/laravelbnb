<template>
    <div>
        <BookableListItem></BookableListItem>
        <BookableListItem></BookableListItem>
    </div>
</template>

<script>

	import BookableListItem from "./BookableListItem";

    export default {
        mounted() {
            console.log('Component mounted.')
        },
        components: {
        	BookableListItem
        }
    }
</script>
