<?
define('VOTE_LIMITER_INCREASE_COUNT', 3);
include ('connect.php');

// check limiter status or increase limiter
            $sql = "SELECT * FROM nyc22_proposal WHERE checked_count < vote_limiter";
            $result = mysql_query($sql, $conn);
            $testCount = mysql_num_rows($result);
            // gets the number of proposals under the current limit

            $sql = "SELECT MIN(checked_count) as checked_count, MAX(vote_limiter) as vote_limiter, MIN(vote_limiter) as min_vote_limiter, COUNT(*) as total FROM nyc22_proposal";
            // Select the lowest number of votes on a proposal, this becomes the value for "checked_count", select the highest number in vote_limiter, this becomes the value for "vote_limiter", select the lowest number in vote_limiter, this becomes the value for "min_vote_limiter", count the total number of rows in the proposal table, this becomes the value for "total"

            $result = mysql_query($sql, $conn);

            if ($result) {
                $rows = mysql_fetch_array($result);

                $totalCount = intval($rows['total']);
                echo '$totalCount: '.$totalCount.'<br>';
                //this number is the total number of rows in the proposal table
                $minCheckedCount = intval($rows['checked_count']);
                //this number is the 
                echo '$minCheckedCount: '.$minCheckedCount.'<br>';
                $maxVoteLimiter = intval($rows['vote_limiter']);
                echo '$maxVoteLimiter: '.$maxVoteLimiter.'<br>';
                $minVoteLimiter = intval($rows['min_vote_limiter']);
                echo '$minVoteLimiter: '.$minVoteLimiter.'<br>';

                echo'Final equation results: ';
                echo '<br>';
                echo ''.$testCount.'';
                echo '<br>';
                echo intval(15 * $totalCount / 36);
                echo '<br>';
                echo intval($maxVoteLimiter - 7);
                
}
                ?>