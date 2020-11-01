app.post("/email",(req,res)=>{
    res.json({name: req.query.first+" "+req.query.last});
});