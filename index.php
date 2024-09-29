<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Find Tours</h1>
        <form action="form.php" method="post">
            <div class="field-group">
                <label for="name" class="field-title">Frist Name</label>
                <input type="text" name="name" id="name" placeholder="Enter your name">
            </div>
            
            <div class="field-group">
                <label for="email" class="field-title">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter your email for contact">
            </div>
            
            <div class="field-group">
                <label for="region" class="field-title">Where would you like to go?</label>
                <select name="region" id="region">
                    <option value="">--Select a Region--</option>
                    <option value="Asia">Asia</option>
                    <option value="Oceania">Oceania</option>
                    <option value="Europe">Europe</option>
                    <option value="North America">North America</option>
                    <option value="South America">South America</option>
                </select>
            </div>
            <div class="field-group">
                <h6 class="field-title">Preferred seaons:</h6>
                <input type="radio" name="season" id="summer" value="Summer">
                <label for="summer">Summer</label>
                <input type="radio" name="season" id="winter" value="Winter">
                <label for="winter">Winter</label>
                <input type="radio" name="season" id="spring" value="Spring">
                <label for="spring">Spring</label>
                <input type="radio" name="season" id="autumn" value="Autumn"> 
                <label for="autumn">Autumn</label>

            </div>
            <div class="field-group">
                <h5 class="field-title">your Interests:</h5>

                
                <input type="checkbox" name="interests[]" id="photography" value="Photography">
                <label for="photography">Photography</label>

                <input type="checkbox" name="interests[]" id="trekking" value="trekking">
                <label for="trekking">Trekking</label>

                <input type="checkbox" name="interests[]" id="hiking" value="hiking">
                <label for="hiking">Hiking</label>

                <input type="checkbox" name="interests[]" id="fishing" value="fishing"> 
                <label for="fishing">Fishing</label>    

                <input type="checkbox" name="interests[]" id="camping" value="camping">
                <label for="camping">Camping</label>

            </div>

            <div class="field-group">
                <label for="participants" class="field-title">No. of Participants</label>
                <input type="number" name="participants" id="participants">
            </div>

            <div class="field-group">
                <label for="message" class="field-title">Tell about your requirement:</label>
                <textarea name="message" id="message"></textarea>
            </div>
            <div class="field-group">
                <button type="submit">Send</button>
            </div>
                



            </div>      
</body>
</html>