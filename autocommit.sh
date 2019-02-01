git add *
echo "enter version or comment"
read VERSION
git commit -m "$VERSION"
git push -u origin master
sleep 5