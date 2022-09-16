<script lang="ts">
    //Imports
    import page from "page";
    import Main from "./lib/main.svelte";
    import Blogs from "./lib/blogs.svelte";
    import Giveaways from "./lib/giveaways.svelte";
    import Navbar from "./lib/components/navbar.svelte";
    import idmeowkiwjeowkaajqolqowjwp from "./lib/idmeowkiwjeowkaajqolqowjwp.svelte"
    //Set default component
    let current = Main;
    //Page.js routing
    page("/", () => (current = Main));
    page("/blogs", () => (current = Blogs));
    page("/giveaways", () => (current = Giveaways));
    page("/idmeowkiwjeowkaajqolqowjwp", () => (current = idmeowkiwjeowkaajqolqowjwp));
    current = Main;
    page.start()

</script>

        
<Navbar />
<a href="/idmeowkiwjeowkaajqolqowjwp">write</a>
<svelte:component this={current} />