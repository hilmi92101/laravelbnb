<template>
    <div>
        <BookableListItem title="Cheap Villa" item-content="A very cheap villa 1" :price="200"></BookableListItem>
        <BookableListItem title="Cheap Villa 2" item-content="A very cheap villa 2" :price="300"></BookableListItem>
    </div>
</template>

<script>

	import BookableListItem from "./BookableListItem";

    export default {
        mounted() {
            //console.log('Component mounted.')
        },
        components: {
        	BookableListItem
        }
    }
</script>
