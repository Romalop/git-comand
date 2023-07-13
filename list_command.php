<?php
    $command_git = array( array(
                            "command_name" => "git add",
                            "description" => "Moves changes from the working directory to the staging area. This gives you the opportunity to prepare a snapshot before committing it to the official history."
                        ), 
                        array(
                            "command_name" => "git branch",
                            "description" => "This command is your general-purpose branch administration tool. It lets you create isolated development environments within a single repository."
                        ),
                        array(
                            "command_name" => "git checkout",
                            "description" => "In addition to checking out old commits and old file revisions, git checkout is also the means to navigate existing branches. Combined with the basic Git commands, it’s a way to work on a particular line of development."
                        ),
                        array(
                            "command_name" => "git clean",
                            "description" => "Removes untracked files from the working directory. This is the logical counterpart to git reset, which (typically) only operates on tracked files."
                        ),
                        array(
                            "command_name" => "git clone",
                            "description" => "Creates a copy of an existing Git repository. Cloning is the most common way for developers to obtain a working copy of a central repository."
                        ),
                        array(
                            "command_name" => "git commit",
                            "description" => "Takes the staged snapshot and commits it to the project history. Combined with git add, this defines the basic workflow for all Git users."
                        ),
                        array(
                            "command_name" => "git commit --amend",
                            "description" => "Passing the --amend flag to git commit lets you amend the most recent commit. This is very useful when you forget to stage a file or omit important information from the commit message."
                        ),
                        array(
                            "command_name" => "git config",
                            "description" => "A convenient way to set configuration options for your Git installation. You’ll typically only need to use this immediately after installing Git on a new development machine."
                        ),
                        array(
                            "command_name" => "git fetch",
                            "description" => "Fetching downloads a branch from another repository, along with all of its associated commits and files. But, it doesn't try to integrate anything into your local repository. This gives you a chance to inspect changes before merging them with your project."
                        ),
                        array(
                            "command_name" => "git init",
                            "description" => "Initializes a new Git repository. If you want to place a project under revision control, this is the first command you need to learn."
                        ),
                        array(
                            "command_name" => "git log",
                            "description" => "Lets you explore the previous revisions of a project. It provides several formatting options for displaying committed snapshots."
                        ),
                        array(
                            "command_name" => "git merge",
                            "description" => "A powerful way to integrate changes from divergent branches. After forking the project history with git branch, git merge lets you put it back together again."
                        ), 
                        array(
                            "command_name" => "git pull",
                            "description" => "Pulling is the automated version of git fetch. It downloads a branch from a remote repository, then immediately merges it into the current branch. This is the Git equivalent of svn update."
                        ), 
                        array(
                            "command_name" => "git push",
                            "description" => "Pushing is the opposite of fetching (with a few caveats). It lets you move a local branch to another repository, which serves as a convenient way to publish contributions. This is like svn commit, but it sends a series of commits instead of a single changeset."
                        ), 
                        array(
                            "command_name" => "git rebase",
                            "description" => "Rebasing lets you move branches around, which helps you avoid unnecessary merge commits. The resulting linear history is often much easier to understand and explore."
                        ), 
                        array(
                            "command_name" => "git rebase -i",
                            "description" => "The -i flag is used to begin an interactive rebasing session. This provides all the benefits of a normal rebase, but gives you the opportunity to add, edit, or delete commits along the way."
                        ), 
                        array(
                            "command_name" => "git reflog",
                            "description" => "Git keeps track of updates to the tip of branches using a mechanism called reflog. This allows you to go back to changesets even though they are not referenced by any branch or tag."
                        ), 
                        array(
                            "command_name" => "git remote",
                            "description" => "A convenient tool for administering remote connections. Instead of passing the full URL to the fetch, pull, and push commands, it lets you use a more meaningful shortcut."
                        ), 
                        array(
                            "command_name" => "git reset",
                            "description" => "Undoes changes to files in the working directory. Resetting lets you clean up or completely remove changes that have not been pushed to a public repository."
                        ),
                        array(
                            "command_name" => "git revert",
                            "description" => "Undoes a committed snapshot. When you discover a faulty commit, reverting is a safe and easy way to completely remove it from the code base."
                        ),
                        array(
                            "command_name" => "git status",
                            "description" => "Displays the state of the working directory and the staged snapshot. You’ll want to run this in conjunction with git add and git commit to see exactly what’s being included in the next snapshot."
                        )
                    );
?>