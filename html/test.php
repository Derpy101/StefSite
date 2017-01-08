<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
        $(document).ready(function () {
            $("#btn").click(function () {
                alert($("input[type=radio]:checked").val());
            });
        });
</script>
*************************
<asp:Button ID="btn" runat="server" Text="Go" />
<input type="radio" name="feedback" value="1" />Outstanding
<input type="radio" name="feedback" value="2" />Good
<input type="radio" name="feedback" value="3" />Acceptable
