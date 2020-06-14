<template>
	<a :href="href" @click.prevent="scrollTo">
		<slot></slot>
	</a>
</template>

<script>
	export default {
		name: 'ScrollLink',
		props: {
			href: String,
		},
		methods: {
			scrollTo() {
				document.querySelector(this.href).scrollIntoView({
					behavior: 'smooth',
				});
			},
		},
	};
</script>
