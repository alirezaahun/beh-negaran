add :                           add file before comit
comit -m :                      add caption and file
amend(git commit --amend):      return to before comit to add another file if you forgrt add one file
log :                           log all the changes
log --oneline:                  show all the changes in one line
log --oneline --all:            show all the changes in one line from all branch
branch switch :                 switch to orher branch
branch create & switch:         switch -c (Name of branch)
switch -c (Name of branch):     branch create & switch to created branch  
change branch name:             branch -m (New Name)
delete branch :                 branch -d (Name of branch)
merge:                          merge Name(add a name that we want to merge to a branch that we are already in it now)
diff":                          compare changes cmd with vscode                               
diff --stage:                   compare  changes lastCommit with vscode  
git head:
diff hashCommit..hashCommit:    compare between commit
checkout hashCommit:            change to the specific commit(this command is equal to switch command)    
checkout head~2:                Go back to the previous two commit
restore <fileName>:             delete one file
restore --staged                exit this file from stage 
stash:                          save changes without add & commit
stash save 'text for hint':     save changes without add & commit + add massage
stash pop:                      return & delete changes
stash apply:                    return stash to even another branch & dont delete stash
stash list:                     show list of all stash
stash apply <tagname>:          return to stahsh that it's tagname selected
drop <tagName>:                 delete one of the stash from list
clear:                          delete all stash
************************************************************************************************************************
 remote add <name> <url>:       define a Destination for send project to this url   
 remote -v:                     return url of Destination
 remote push <name> <branch>:   push the changes to specific branch
 
 test
 
    
  

















site : gitignore io       --create data for git ignore
