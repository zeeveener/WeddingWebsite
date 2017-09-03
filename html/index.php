<!DOCTYPE html>
<html>
<!-- Colors -->
<!-- Purple: #9900D6 -->
<!-- Teal: #008282 -->
<!-- Cream: #FEF9E6 -->

    <head>
        <title>Beemer Wedding</title>
        <link rel="stylesheet" href="../css/style.css" />
    </head>
    <header>
        <nav id="menu">
            <ul>
                <li><a href="#wedding">Wedding Information</a></li>
                <li><a href="#location">Location</a></li>
                <li><a href="#excursions">Excursions</a></li>
                <li><a href="#travel-agent">Travel Agent</a></li>
                <li><a href="#rsvp">RSVP</a></li>
            </ul>
        </nav>
    </header>
    <body>
        <section id="wedding-section">
            <span class="navbar-padding" id="wedding"></span>
            <h1>What's Up?</h1>

            <div id="wedding-information" class="information">
                <h3>Merissa & Zac Are Getting Hitched!</h3>
                <table>
                    <tr>
                        <td class="info-label">Who:</td>
                        <td>Merissa van Steenoven and Zac Beemer</td>
                    </tr>
                    <tr>
                        <td class="info-label">When:</td>
                        <td>April 5, 2018 @ 3:00pm</td>
                    </tr>
                    <tr>
                        <td class="info-label">Where:</td>
                        <td>Puerto Vallarta, Mexico</td>
                    </tr>
                    <tr>
                        <td class="info-label">Why:</td>
                        <td>Why not? But also, <em>Love<sup><sup>TM</sup></sup></em></td>
                    </tr>
                </table>
            </div>
        </section>
        <section id="location-section">
            <span class="navbar-padding" id="location"></span>
            <h1>Where is this place?</h1>
            <div id="resort-info" class="information">
                <table>
                    <tr>
                        <td class="info-label">Resort:</td>
                        <td>Grand Palladium Resort and Spa</td>
                    </tr>
                    <tr>
                        <td class="info-label">Location:</td>
                        <td>Puerto Vallarta, <a href="https://www.youtube.com/watch?v=QGgGCvuez14">Mexico</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="info-label">Website:</td>
                        <td><a href="https://www.palladiumhotelgroup.com/en/riviera-nayarit/palladium-vallarta-resort-spa/" name="spa-website">Resort Website</a></td>
                    </tr>
                    <tr>
                        <td class="info-label">Photos:</td>
                        <td>
                            <a href="./photos.html" name=gallery-page">Gallery Page</a>
                        </td>
                    </tr>
                </table>
            </div>
        </section>
        <section id="excursions-section">
            <span class="navbar-padding" id="excursions"></span>
            <h1>What will we do?</h1>
            <div id="excursions-info" class="information">
                <p>Besides enjoying the burning orb in the sky, lounging about in the cold water, and getting plastered at the multiple bars,
                you can spend your money and enjoy some incredible excursions through a third party!</p>
                <p>Some options which may be of interest are listed below:</p>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Link</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>Vallarta Adventures</td>
                        <td>
                            <a href="http://www.vallarta-adventures.com/tours">http://vallarta-adventures.com</a>
                        </td>
                        <td>Many different options in this one. Merissa and Zac may go for the <b>Outdoor Adventure</b> if time permits.</td>
                    </tr>
                    <tr>
                        <td>The Last Saskatchewan Pirate</td>
                        <td>
                            <a href="http://www.pirateshipvallarta.com/the-last-canadian-pirate-night">http://pirateshipvallarta.com</a>
                        </td>
                        <td>Although the booking section doesn't appear to be very clear, there are other options if the Canadian version
                        is not available. Merissa and Zac will most likely be going on this excursion.</td>
                    </tr>
                </table>
            </div>
        </section>
        <section id="travel-agent-section">
            <span class="navbar-padding" id="travel-agent"></span>
            <h1>How do we get there?</h1>
            <div id="travel-agent-info" class="information">
                <p>
                    We have been extremely lucky to have Sheena as our travel agent (as well as wedding planner).
                    She is a pleasant and professional person who has single-handedly made this wedding a possibility.
                </p>
                <p>
                    If you haven't already, (we know who you are), please use the following information to get in touch with Sheena to
                    organize your flights to and from the resort.
                </p>
                <p>
                    We have set up deals with the airline out of the following airports:
                </p>
                <ul>
                    <li>Calgary</li>
                    <li>Edmonton</li>
                    <li>Toronto</li>
                </ul>
                <p>
                    Edmonton and Toronto have their rates locked in until October 1st, while Calgary has the rate locked in until January 1st.
                    If you want the guaranteed deal rate, please book your flights through Sheena before your respective date. Otherwise,
                    you risk losing the deal rate and will be at the mercy of the Air-Travel gods.
                </p>
                <p>
                    Sheena's contact information is as follows:
                </p>
                <table>
                    <tr>
                        <td>Phone Number:</td>
                        <td>1-(403)-901-7311</td>
                    </tr>
                    <tr>
                        <td>Email Address:</td>
                        <td>sheena@kaleidoscopetravel.ca</td>
                    </tr>
                </table>
            </div>
        </section>
        <section id="rsvp-section">
            <span class="navbar-padding" id="rsvp"></span>
            <h1>How do I sign up?</h1>
            <div class="information">
                <?php
                    if( isset($_GET["responded"]) ){
                ?>
                    <div id="success_message">
                        Thank you for RSVPing!
                        <br/>
                        If you have more people to RSVP for, please do so using the same form.
                    </div>
                <?php
                    } else {
                ?>
                    <div style="color: darkred; text-align: center; width: 100%; font-size: 1.5rem; margin: 0 auto">
                        Due to reasons, if you do not fill out the RSVP, we will have to assume you are not coming and will not account for you in our planning.
                    </div>
                <?php
                    }
                ?>

                <form class="rsvp-form" method="post" action="../actions/submit.php">
                    <ul>
                        <li>
                            <label for="first-name">First Name</label>
                            <input type="text" id="first-name" name="first-name" maxlength="100" required>
                            <span>Enter your first name here</span>
                        </li>
                        <li>
                            <label for="last-name">Last Name</label>
                            <input type="text" id="last-name" name="last-name" maxlength="100" required>
                            <span>Enter your last name here</span>
                        </li>
                        <li>
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" maxlength="100" required>
                            <span>Enter a valid email address</span>
                        </li>
                        <li>
                            <label for="coming">I will be there</label>
                            <input type="checkbox" id="coming" name="coming">
                            <span>Will you be coming? (Unchecked = No)</span>
                        </li>
                        <li>
                            <input type="submit" value="Submit RSVP" >
                        </li>
                    </ul>
                </form>
            </div>
        </section>
    </body>
</html>