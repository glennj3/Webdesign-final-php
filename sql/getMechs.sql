SELECT mechfinal.mechname,mechfinal.mechid,mechfinal.creatorid,usersfinal.userId,usersfinal.username
FROM mechfinal
JOIN usersfinal ON mechfinal.creatorid = usersfinal.userId