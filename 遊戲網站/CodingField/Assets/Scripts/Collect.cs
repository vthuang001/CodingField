using UnityEngine;
using System.Collections;

public class Collect : MonoBehaviour {

    public GameObject CollectObject;
    // Use this for initialization
    void Start()
    {

    }

    // Update is called once per frame
    void Update()
    {

    }

    public void appear()
    {
        CollectObject.SetActive(true);
    }

    public void disappear()
    {
        CollectObject.SetActive(false);
    }
}