SELECT mechfinal.mechname,usersfinal.username,mechfinal.creatorid,usersfinal.userId
FROM mechfinal
JOIN usersfinal on mechfinal.creatorid = usersfinal.userId
WHERE mechfinal.mechname=:mechname