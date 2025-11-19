<!DOCTYPE html>
<html>
<head>
    <title>PHP Lyric Remix</title>
    <style>
        /*For scrolling to avoid overflow or problems in scroll*/
        html, body {
            height: 100%;
            margin: 0;
            padding: 40px 60px;
            scroll-behavior: smooth;

        }

        /* For styling body with soft gradient and padding */
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #fceff9, #fddde6, #ffe4ec);
            color: #4a4a4a;
            padding: 40px;
            position: relative;
            max-height: 100vh;
            
        }

        /*For random shapes to add design*/
        body::before, body::after {
            content: "";
            position: absolute;
            border-radius: 50%;
            opacity: 0.3;
            z-index: 0;
        }

        body::before {
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, #ffb6c1, #ffc0cb);
            top: -100px;
            left: -100px;
        }

        body::after {
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, #dda0dd, #e6e6fa);
            bottom: -150px;
            right: -150px;
        }

        /*Header and Line styling*/
        h1, h2 {
            color: #d63384;
            text-align: center;
            z-index: 1;
            position: relative;
        }

        h3 {
            color: #c71585;
            margin-top: 30px;
            z-index: 1;
            position: relative;
        }

        p {
            background: rgba(255, 255, 255, 0.6);
            padding: 10px 15px;
            border-radius: 12px;
            margin: 5px 0;
            z-index: 1;
            position: relative;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }

        /* For spacing */
        .verse, .chorus, .bridge {
            margin-bottom: 30px;
            z-index: 1;
            position: relative;
        }

    </style>
</head>
<body>

<?php
// Basic string variables
$title = "Just the Way You Are";
$artist = "Bruno Mars";
$mood = "romantic, love, expression";

// Number variables 
$verseCount = 2;
$repeatChorus = "2"; 

// Arrays of the nouns, verbs, adjectives that got from the lyrics
$nouns = ["eyes", "hair", "stars", "smile", "world", "face", "lips", "laugh"];
$verbs = ["see", "shine", "fall", "compliment", "ask", "kiss", "hate", "smile", "stop", "stare"];
$adjectives = ["beautiful", "sexy", "amazing", "perfect", "sad"];

// Song sections as arrays
$verse1 = [
    "Oh, her {$nouns[0]}, her {$nouns[0]} make the {$nouns[2]} look like they're not {$verbs[1]}in'",
    "Her {$nouns[1]}, her {$nouns[1]} {$verbs[2]}s perfectly without her tryin'",
    "She's so {$adjectives[0]}, uh",
    "And I tell her every day",
    "Yeah, I know, I know, when I {$verbs[3]} her, she won't believe me",
    "And it's so, it's so {$adjectives[4]} to think that she don't {$verbs[0]} what I {$verbs[0]}",
    "But every time she {$verbs[4]}s me, \"Do I look okay?\"",
    "I say"
];

$chorus = [
    "When I {$verbs[0]} your {$nouns[5]}",
    "There's not a thing that I would change",
    "'Cause you're {$adjectives[2]}",
    "Just the way you are",
    "And when you {$verbs[7]}",
    "The whole {$nouns[4]} {$verbs[8]}s and {$verbs[9]}s for a while",
    "'Cause, girl, you're {$adjectives[2]}",
    "Just the way you are"
];

$verse2 = [
    "Her {$nouns[6]}, her {$nouns[6]}, I could {$verbs[5]} them all day if she'd let me",
    "Her {$nouns[7]}, her {$nouns[7]}, she {$verbs[6]}s, but I think it's so {$adjectives[1]}",
    "She's so {$adjectives[0]}, uh",
    "And I tell her every day",
    "Oh, you know, you know, you know I'd never ask you to change",
    "If {$adjectives[3]}'s what you're searching for, then just stay the same",
    "So don't even bother askin' if you look okay",
    "You know I'll say"
];

$bridge = [
    "The way you are",
    "The way you are",
    "Girl, you're {$adjectives[2]}",
    "Just the way you are"
];

// Type juggling and conversions, operators
$totalChorusLines = count($chorus) * $repeatChorus; 
$verseTotal = $verseCount + 1.5; 

// Output of the Song
echo "<h1>$title</h1>";
echo "<h2>by $artist</h2>";
echo "<p><strong>Mood:</strong> $mood</p>";

// Verse 1
echo "<div class='verse'><h3>Verse 1</h3>";
echo "<p>" . $verse1[0] . "</p>";
echo "<p>" . $verse1[1] . "</p>";
echo "<p>" . $verse1[2] . "</p>";
echo "<p>" . $verse1[3] . "</p>";
echo "<p>" . $verse1[4] . "</p>";
echo "<p>" . $verse1[5] . "</p>";
echo "<p>" . $verse1[6] . "</p>";
echo "<p>" . $verse1[7] . "</p>";
echo "</div>";

// Chorus (repeated twice manually)
echo "<div class='chorus'><h3>Chorus</h3>";
echo "<p>" . $chorus[0] . "</p>";
echo "<p>" . $chorus[1] . "</p>";
echo "<p>" . $chorus[2] . "</p>";
echo "<p>" . $chorus[3] . "</p>";
echo "<p>" . $chorus[4] . "</p>";
echo "<p>" . $chorus[5] . "</p>";
echo "<p>" . $chorus[6] . "</p>";
echo "<p>" . $chorus[7] . "</p>";
echo "<p>Yeah</p>";

echo "<p>" . $chorus[0] . "</p>";
echo "<p>" . $chorus[1] . "</p>";
echo "<p>" . $chorus[2] . "</p>";
echo "<p>" . $chorus[3] . "</p>";
echo "<p>" . $chorus[4] . "</p>";
echo "<p>" . $chorus[5] . "</p>";
echo "<p>" . $chorus[6] . "</p>";
echo "<p>" . $chorus[7] . "</p>";
echo "<p>Yeah</p>";
echo "</div>";

// Verse 2
echo "<div class='verse'><h3>Verse 2</h3>";
echo "<p>" . $verse2[0] . "</p>";
echo "<p>" . $verse2[1] . "</p>";
echo "<p>" . $verse2[2] . "</p>";
echo "<p>" . $verse2[3] . "</p>";
echo "<p>" . $verse2[4] . "</p>";
echo "<p>" . $verse2[5] . "</p>";
echo "<p>" . $verse2[6] . "</p>";
echo "<p>" . $verse2[7] . "</p>";
echo "</div>";

// Bridge
echo "<div class='bridge'><h3>Bridge</h3>";
echo "<p>" . $bridge[0] . "</p>";
echo "<p>" . $bridge[1] . "</p>";
echo "<p>" . $bridge[2] . "</p>";
echo "<p>" . $bridge[3] . "</p>";
echo "</div>";

// Final Chorus
echo "<div class='chorus'><h3>Final Chorus</h3>";
echo "<p>" . $chorus[0] . "</p>";
echo "<p>" . $chorus[1] . "</p>";
echo "<p>" . $chorus[2] . "</p>";
echo "<p>" . $chorus[3] . "</p>";
echo "<p>" . $chorus[4] . "</p>";
echo "<p>" . $chorus[5] . "</p>";
echo "<p>" . $chorus[6] . "</p>";
echo "<p>" . $chorus[7] . "</p>";
echo "<p>Yeah</p>";
echo "</div>";

// Comments and Type juggling output
echo "<hr>";
echo "<p><em>Total chorus lines displayed: $totalChorusLines</em></p>";
echo "<p><em>Total verses (with float addition): $verseTotal</em></p>";
echo "<div style='height: 100px;'></div>";

?>

<!-- Just the Way you Are – Bruno Mars Lyrics:
[Intro]
Oh
Oh
Oh
Oh

[Verse 1]
Oh, her eyes, her eyes make the stars look like they're not shinin'
Her hair, her hair falls perfectly without her tryin'
She's so beautiful, uh
And I tell her every day
Yeah, I know, I know, when I compliment her, she won't believe me
And it's so, it's so sad to think that she don't see what I see
But every time she asks me, "Do I look okay?"
I say

[Chorus]
When I see your face
There's not a thing that I would change
'Cause you're amazing
Just the way you are
And when you smile
The whole world stops and stares for a while
'Cause, girl, you're amazing
Just the way you are
Yeah

[Verse 2]
Her lips, her lips, I could kiss them all day if she'd let me
Her laugh, her laugh, she hates, but I think it's so sexy
She's so beautiful, uh
And I tell her every day
Oh, you know, you know, you know I'd never ask you to change
If perfect's what you're searching for, then just stay the same
So don't even bother askin' if you look okay
You know I'll say

[Chorus]
When I see your face
There's not a thing that I would change
'Cause you're amazing
Just the way you are
And when you smile
The whole world stops and stares for a while
'Cause, girl, you're amazing
Just the way you are

[Bridge]
The way you are
The way you are
Girl, you're amazing
Just the way you are

[Chorus]
When I see your face
There's not a thing that I would change
'Cause you're amazing
Just the way you are
And when you smile
The whole world stops and stares for a while
'Cause, girl, you're amazing
Just the way you are
Yeah
-->

</body>
</html>

