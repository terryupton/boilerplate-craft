<template>
  <smooth-reflow tag="div">
    <header>
      <h2 @click="open = !open" class="focus:outline-none cursor-pointer /// text-16 font-semibold  text-gray-900 border-b border-gray-200 pb-2 mb-20">
        <span class="w-4" v-if="!open">+</span>
        <span class="w-4" v-else>-</span>
        {{ title }}
      </h2>
    </header>
    <div class="py-2 px-8" v-show="open">
      <slot name="content"></slot>
    </div>
  </smooth-reflow>
</template>


<script>
  import SmoothReflow from './smoothReflow';
  
  export default {
    components: {
      SmoothReflow
    },
    
    props: {
      'title': String,
      open: {
        default: false,
        type: Boolean
      },
    },
  };
</script>