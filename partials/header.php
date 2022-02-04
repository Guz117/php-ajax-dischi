<header>
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/2048px-Spotify_logo_without_text.svg.png" alt="">
    <select @change="changeGenre" v-model="textSearch" name="genre" id="genre">
        <option value="all">all</option>
        <option value="Rock">rock</option>
        <option value="Pop">pop</option>
        <option value="Jazz">jazz</option>
        <option value="Metal">metal</option>
    </select>
</header>