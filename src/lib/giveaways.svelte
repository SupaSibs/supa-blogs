<script lang="ts">

    let form;
function countrysubmit() {
    e.preventDefault();
    let value; // = form.querySelector("select").value;
    console.log(value);

}
</script>
    <main>
    <h1>
    Supa's Giveaways
    </h1>
    <h2>Select Country to continue</h2>
    <form class="white" action="" on:submit={countrysubmit} bind:this={form}>
    <input type="radio" value="GRM">
    </form>
    </main>
