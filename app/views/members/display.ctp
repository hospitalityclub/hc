<?php $member['Member']['photo'] = "http://secure.hospitalityclub.org/hcphotos/upload/arielmonaco.jpg"; ?>
<div class="grid_16">
    <h2> 
      <?php echo $member['Country']['name'] ?>
      &gt; <?php echo $member['Member']['region']; ?>
      &gt; <?php echo $member['City']['name']; ?>
      &gt; <?php echo $member['Member']['username']; ?>
    </h2>
</div>
<div class="clear"></div>
<div class="grid_4">
    <?php echo $this->element('menu'); ?>
    <?php echo $this->element('list'); ?>
</div>
<div class="grid_7">
    <?php // echo $this->element('profile'); ?>
     <div class="box">
        <h2>
            <a href="#" id="toggle-tables">Profile</a>
        </h2>
        <div class="block" id="tables">
           <table>
                <thead>
                    <tr>
                        <th colspan="3" class="table-head">Member Images</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd">
                        <td style="padding: 0 !important;">
                            <img src="<?php echo $member['Member']['photo'];?>" width="240"/>
                        </td>
                        <td style="padding: 0 !important;">
                            <img src="<?php echo $member['Member']['photo'];?>" width="240"/>
                        </td>
                    </tr>
                </tbody>
            </table>
          
            <table>
                <thead>
                    <tr>
                        <th colspan="3" class="table-head">Personal Information</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd">
                        <th>Name:</th>
                        <td class="right"><?php echo $member['Member']['name']; ?></td>
                    </tr>
                    <tr>
                        <th>Address:</th>
                        <td class="right"><?php echo $member['Member']['street']; ?></td>
                    </tr>
                    <tr class="odd">
                        <th>City:</th>
                        <td><?php echo $member['City']['name']; ?></td>
                    </tr>
                    <tr>
                        <th>Region:</th>
                        <td class="right"><?php echo $member['Member']['region']; ?></td>
                    </tr>
                    <tr class="odd">
                        <th>Country:</th>
                        <td class="right"><?php echo $member['Country']['name']; ?></td>
                    </tr>
                    <tr>
                    </tr>
                    <tr class="odd">
                        <th>Phone:</th>
                        <td class="right"><?php echo $member['Member']['homephone']; ?> (home) <?php echo $member['Member']['workphone']; ?> (work)</td>
                    </tr>
                    <tr>
                        <th>Instant Contact:</th>
                        <td class="right">
                            MSN: <?php echo $member['Member']['chat_msn']; ?>
                            ICQ: <?php echo $member['Member']['chat_icq']; ?>
                            Yahoo: <?php echo $member['Member']['chat_yahoo']; ?>
                            Skype:<?php echo $member['Member']['chat_skype']; ?>
                            AOL: <?php echo $member['Member']['chat_aol']; ?>
                            Other: <?php echo $member['Member']['chat_others']; ?>
                        </td>
                    </tr>
                    <tr class="odd">
                        <th>Date of Birth:</th>
                        <td class="right"><?php echo $member['Member']['birthday']; ?></td>
                    </tr>
                    <tr>
                        <th>Occupation:</th>
                        <td class="right"><?php echo $member['Member']['occupation']; ?></td>
                    </tr>
                    <tr class="odd">
                        <th>Member Since:</th>
                        <td class="right"><?php echo $member['Member']['created']; ?></td>
                    </tr>
                    <tr>
                        <th>Last Login:</th>
                        <td class="right"><?php echo $member['Member']['lastlogin']; ?></td>
                    </tr>
                    <tr class="odd">
                        <th>Profile Summary:</th>
                        <td class="right"><?php echo stripslashes($member['Member']['othcom']); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!--

    </div>

    <div class="clear"> </div>
    <h5>Secondary Contact:</h5>
    <table>
      <tr>
        <td>Street, City:</td>
        <td><?php echo $member['Member']['secstreet']; ?></td>
        <td><?php echo $member['Member']['seccity']; ?></td>
      </tr><tr>
        <td>State, ZIP:</td>
        <td><?php echo $member['Member']['secregion']; ?></td>
        <td><?php echo $member['Member']['zip']; ?></td>
      </tr><tr>
        <td>Country, Phone:</td>
        <td><?php echo $member['SecCountry']['name']; ?></td>
        <td><?php echo $member['Member']['secphone']; ?></td>
      </tr>
    </table>
    <h5>Travel and Interests:</h5>
    <table>
      <tr>
        <!-- we might have to create a languages table
        profiles should be able to be searchable. for
        example, someone who only speaks spanish wants
        to visit japan, and needs a spanish-speaking
        japanese host -->
        <td>Spoken Languages:</td>
        <td><?php echo stripslashes($member['Member']['languages']); ?></td>
      </tr><tr>
        <td>Hobbies:</td>
        <td><?php echo stripslashes($member['Member']['hobbies']); ?></td>
      </tr><tr>
        <td>Organizations I'm a member of:</td>
        <td><?php echo stripslashes($member['Member']['organizations']); ?></td>
      </tr>
        <!-- this might change to a "travel experience and
        planning"-like feature. where the user provides
        ranges of times and other data. -->
        <td>Travel Experience:</td>
        <td><?php echo stripslashes($member['Member']['travels']); ?></td>
      </tr>
        <td>Planned Trips:</td>
        <td><?php echo stripslashes($member['Member']['plans']); ?></td>
      </tr>
        <!-- we need to think if this shouldn't be merged
        with othcom, or similar fields. does it really makes
        sense here. or maybe the name isn't appropiate :\ -->
        <td>Anything else about myself::</td>
        <td><?php echo stripslashes($member['Member']['aboutmyself']); ?></td>
      </tr>
    </table>

    <h5>Help and Advice:</h5>
    <table>
      <tr>
        <td>I can offer:</td>
        <td><?php echo stripslashes($member['Member']['accom']); ?>
        <!-- make a cakephp element out of this to translate
        the integer values to text strings -->
          <?php echo $member['Member']['offershow']; ?>
          <?php echo $member['Member']['offerdinner']; ?>
          <?php echo $member['Member']['offerother']; ?> </td>
      </tr><tr>
        <td>Best times to help:</td>
        <td><?php echo stripslashes($member['Member']['besttimes']); ?> </td>
      </tr><tr>
        <td>Nearby public transport:</td>
        <td><?php echo stripslashes($member['Member']['publictrans']); ?> </td>
      </tr><tr>
        <td>Nearby biggest cities:</td>
        <td><?php echo stripslashes($member['Member']['bigcities']); ?> </td>
      </tr><tr>
        <!-- check way to generate "also add to travel guide" or use
        wikitravel for this, for me (amonaco) lists almagro instead of
        buenos aires, hmm... :\ -->
        <td style="width: 20%">Interesting things to see and do where I live, my tips (also add... :</td>
        <td><?php echo stripslashes($member['Member']['attractions']); ?> </td>
      </tr>
    </table>

          <?php echo $member['Member']['gender']; ?>
          <?php echo $member['Member']['username']; ?>
          <?php echo $member['Member']['city_volunteer']; ?>
          <?php echo $member['Member']['region_volunteer']; ?>
          <?php echo $member['Member']['country_volunteer']; ?>
          <?php echo $member['Member']['birthday']; ?>
          <?php echo $member['Member']['homepage']; ?>
          <?php echo $member['Member']['photo']; ?>
          <?php echo $member['Member']['homephone']; ?>
          <?php echo $member['Member']['workphone']; ?>
          <?php echo $member['Member']['mobilephone']; ?>
          <?php echo $member['Member']['fax']; ?>
          <?php echo $member['Member']['occupation']; ?>
          <?php echo $member['Member']['updates']; ?>
          <?php echo $member['Member']['secstreet']; ?>
          <?php echo $member['Member']['seccity']; ?>
          <?php echo $member['Member']['secregion']; ?>
          <?php echo $member['Member']['seczip']; ?>
          <?php echo $member['Member']['seccountry']; ?>
          <?php echo $member['Member']['secphone']; ?>
          <?php echo $member['Member']['secinfo']; ?>
          <?php echo $member['Member']['languages']; ?>
          <?php echo $member['Member']['publictrans']; ?>
          <?php echo $member['Member']['bigcities']; ?>
          <?php echo $member['Member']['attractions']; ?>
          <?php echo $member['Member']['withgbfriend']; ?>
          <?php echo $member['Member']['withgrandpa']; ?>
          <?php echo $member['Member']['withpar']; ?>
          <?php echo $member['Member']['withsibs']; ?>
          <?php echo $member['Member']['withop']; ?>
          <?php echo $member['Member']['withalone']; ?>
          <?php echo $member['Member']['garden']; ?>
          <?php echo $member['Member']['spacefloor']; ?>
          <?php echo $member['Member']['matress']; ?>
          <?php echo $member['Member']['sofa']; ?>
          <?php echo $member['Member']['bed']; ?>
          <?php echo $member['Member']['ownroom']; ?>
          <?php echo $member['Member']['sleepother']; ?>
          <?php echo $member['Member']['bringtent']; ?>
          <?php echo $member['Member']['bringmat']; ?>
          <?php echo $member['Member']['bringsleep']; ?>
          <?php echo $member['Member']['numberguest']; ?>
          <?php echo $member['Member']['staylength']; ?>
          <?php echo $member['Member']['notifyshould']; ?>
          <?php echo $member['Member']['notifymust']; ?>
          <?php echo $member['Member']['callarrival']; ?>
          <?php echo $member['Member']['callbetween1']; ?>
          <?php echo $member['Member']['callbetween2']; ?>
          <?php echo $member['Member']['guestgender']; ?>
          <?php echo $member['Member']['smoking']; ?>
          <?php echo $member['Member']['nodrugs']; ?>
          <?php echo $member['Member']['noalc']; ?>
          <?php echo $member['Member']['payphone']; ?>
          <?php echo $member['Member']['payfood']; ?>
          <?php echo $member['Member']['dodishes']; ?>
          <?php echo $member['Member']['restriother']; ?>
          <?php echo $member['Member']['pets']; ?>
          <?php echo stripslashes($member['Member']['othcom']); ?>
          <?php echo $member['Member']['feedback']; ?>
          <?php echo $member['Member']['terms']; ?>
          <?php echo $member['Member']['category']; ?>
          <?php echo $member['Member']['status']; ?>
          <?php echo $member['Member']['flags']; ?>
          <?php echo $member['Member']['level']; ?>
          <?php echo $member['Member']['hcnotes']; ?>
          <?php echo $member['Member']['name']; ?>
          <?php echo $member['Member']['email']; ?>
          <?php echo $member['Member']['password']; ?>
          <?php echo $member['Member']['secemail']; ?>
          <?php echo $member['Member']['namehide']; ?>
          <?php echo $member['Member']['streethide']; ?>
          <?php echo $member['Member']['lastlogin']; ?>
          <?php echo $member['Member']['ip']; ?>
          <?php echo $member['Member']['vol_teaser']; ?>
          <?php echo $member['Member']['vol_contact_info']; ?>
          <?php echo $member['Member']['vol_why']; ?>
          <?php echo $member['Member']['vol_what']; ?>
          <?php echo $member['Member']['vol_additional']; ?>
          <?php echo $member['Member']['emailerror']; ?>
          <?php echo $member['Member']['lastaccess']; ?>
          <?php echo $member['Member']['latitude']; ?>
          <?php echo $member['Member']['longitude']; ?>
          <?php echo $member['Member']['nbhost']; ?>
          <?php echo $member['Member']['nbguest']; ?>
          <?php echo $member['Member']['nbcomment']; ?>
          <?php echo $member['Member']['visincity']; ?>
          <?php echo $member['Member']['visinlocation']; ?>
          <?php echo $member['Member']['nbtrust']; ?>
          <?php echo $member['Member']['idcity']; ?>
          <?php echo $member['Member']['nbpspcheck']; ?>
          <?php echo $member['Member']['lang_signup']; ?>
          <?php echo $member['Member']['lang_last']; ?>
          <?php echo $member['Member']['nbvisit']; ?>
          <?php echo $member['Member']['nbvisittoday']; ?>
          <?php echo $member['Member']['myvisitidlist']; ?>
          <?php echo $member['Member']['nbofremindreceivedsincelastlog']; ?>
          <?php echo $member['Member']['nbofemailreceivedsincelastlog']; ?>
          <?php echo $member['Member']['toberemind']; ?>
          <?php echo $member['Member']['attractions_updated']; ?>
          <?php echo $member['Member']['created']; ?>
          <?php echo $member['Member']['updated']; ?>
      -->
</div>
<div class="grid_5">
    <!-- Search box-->
    <?php echo $this->element('friends'); ?>
    <?php echo $this->element('search'); ?>
</div>


